USE bancoContas;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    conta VARCHAR(50) NOT NULL
);

INSERT INTO users (nome, conta)
VALUES
    ('João Silva', '1234567890'),
    ('Maria Santos', '0987654321'),
    ('Pedro Almeida', '2468135790'),
    ('Ana Pereira', '1357924680'),
    ('Lucas Oliveira', '9876543210'),
    ('Mariana Costa', '0123456789'),
    ('Rafael Santos', '5678901234'),
    ('Carolina Silva', '7890123456'),
    ('Fernando Almeida', '3147258369'),
    ('Juliana Pereira', '9517538264'),
    ('Rodrigo Oliveira', '4680135792'),
    ('Cristina Costa', '6789054321'),
    ('Gabriel Santos', '1357924680'),
    ('Amanda Silva', '7890123456'),
    ('Ricardo Almeida', '5678901234'),
    ('Carla Pereira', '3147258369'),
    ('Luiz Oliveira', '9517538264'),
    ('Isabela Costa', '4680135792'),
    ('Daniel Santos', '6789054321'),
    ('Patrícia Silva', '1234567890'),
    ('Marcos Santos', '0987654321'),
    ('Camila Almeida', '2468135790'),
    ('Alexandre Pereira', '1357924680'),
    ('Renata Oliveira', '9876543210'),
    ('Victor Costa', '0123456789'),
    ('Tatiana Santos', '5678901234'),
    ('Gustavo Silva', '7890123456'),
    ('Carolina Almeida', '3147258369'),
    ('Diego Pereira', '9517538264'),
    ('Alice Oliveira', '4680135792');