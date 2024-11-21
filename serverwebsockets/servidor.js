// server.js
const express = require('express');
const mysql = require('mysql2');
const cors = require('cors');

const app = express();
app.use(express.json());
app.use(cors());

// Configuração da conexão com o banco de dados
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'dbperifa'
});

db.connect((err) => {
    if (err) throw err;
    console.log('Conexão com o banco de dados estabelecida com sucesso!');
});

// Rota para listar todos os vendedores
app.get('/vendedores', (req, res) => {
    db.query('SELECT idVendedor, nomeVendedor FROM tbVendedor', (err, results) => {
        if (err) {
            console.error(`Erro ao recuperar vendedores: ${err}`);
            res.status(500).json({ error: 'Erro ao recuperar a lista de vendedores.' });
        } else {
            res.json(results);
        }
    });
});

// Rota para listar clientes com quem o vendedor já teve uma conversa
app.get('/clientes-conversas/:idVendedor', (req, res) => {
    const idVendedor = req.params.idVendedor;

    const query = `
        SELECT DISTINCT c.idCliente, c.nomeCliente, c.imagemCliente
        FROM mensagens m
        INNER JOIN tbCliente c ON m.idCliente = c.idCliente
        WHERE m.idVendedor = ?
    `;

    db.query(query, [idVendedor], (err, results) => {
        if (err) {
            console.error(`Erro ao recuperar lista de clientes com conversas: ${err}`);
            res.status(500).json({ error: 'Erro ao recuperar a lista de clientes com conversas.' });
        } else {
            res.json(results);
        }
    });
});

// Rota para listar vendedores com quem o cliente já teve uma conversa
app.get('/conversas/:idCliente', (req, res) => {
    const idCliente = req.params.idCliente;

    const query = `
        SELECT DISTINCT v.idVendedor, v.nomeVendedor, v.imagemVendedor
        FROM mensagens m
        INNER JOIN tbVendedor v ON m.idVendedor = v.idVendedor
        WHERE m.idCliente = ?
    `;

    db.query(query, [idCliente], (err, results) => {
        if (err) {
            console.error(`Erro ao recuperar lista de vendedores com conversas: ${err}`);
            res.status(500).json({ error: 'Erro ao recuperar a lista de vendedores com conversas.' });
        } else {
            res.json(results);
        }
    });
});

// Rota para listar mensagens entre um cliente e um vendedor específico
app.get('/mensagens/:idContato', (req, res) => {
    const idUsuario = req.headers['id-usuario'];
    const tipoUsuario = req.headers['tipo-usuario'];
    const idContato = req.params.idContato;

    const query = tipoUsuario === 'cliente'
        ? 'SELECT * FROM mensagens WHERE (idCliente = ? AND idVendedor = ?) OR (idCliente = ? AND idVendedor = ?)'
        : 'SELECT * FROM mensagens WHERE (idVendedor = ? AND idCliente = ?) OR (idVendedor = ? AND idCliente = ?)';

    db.query(query, [idUsuario, idContato, idContato, idUsuario], (err, results) => {
        if (err) {
            console.error(`Erro ao recuperar mensagens: ${err}`);
            res.status(500).json({ error: 'Erro ao recuperar mensagens.' });
        } else {
            res.json(results);
        }
    });
});

// Rota para enviar mensagem entre cliente e vendedor
app.post('/mensagens/:idContato', (req, res) => {
    const idUsuario = req.headers['id-usuario'];
    const tipoUsuario = req.headers['tipo-usuario'];
    const idContato = req.params.idContato;
    const { mensagem } = req.body;
    const enviado = tipoUsuario === 'cliente';

    const sql = 'INSERT INTO mensagens (idCliente, idVendedor, mensagem, enviado) VALUES (?, ?, ?, ?)';
    const values = enviado
        ? [idUsuario, idContato, mensagem, 1]
        : [idContato, idUsuario, mensagem, 0];

    db.query(sql, values, (err, result) => {
        if (err) {
            console.error(`Erro ao inserir mensagem no banco de dados: ${err}`);
            res.status(500).json({ error: 'Erro ao enviar a mensagem.' });
        } else {
            res.status(200).json({ success: true, message: 'Mensagem enviada com sucesso!' });
        }
    });
});

const PORT = 3000;
app.listen(PORT, () => {
    console.log(`Servidor rodando na porta ${PORT}`);
});