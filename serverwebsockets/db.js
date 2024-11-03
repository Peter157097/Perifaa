const mysql = require('mysql');

// Crie uma conexão com o banco de dados
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'dbperifa'
});

// Conecte-se ao banco de dados
connection.connect((err) => {
    if (err) {
        console.error('Erro ao conectar ao banco de dados:', err);
        return;
    }
    console.log('Conexão com o banco de dados estabelecida com sucesso!');
});

// Função para inserir mensagens no banco de dados
const insertMessage = (idCliente, message) => {
    return new Promise((resolve, reject) => {
        const sql = 'INSERT INTO mensagens (idCliente, conteudo) VALUES (?, ?)';
        connection.query(sql, [idCliente, message], (err, results) => {
            if (err) {
                console.error('Erro ao inserir mensagem no banco de dados:', err);
                return reject(err);
            }
            resolve(results);
        });
    });
};

module.exports = { insertMessage };
