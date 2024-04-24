-- Criar a tabela "mesa"
CREATE TABLE Mesa (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Status BOOLEAN,
    Senha VARCHAR(50)
);

-- Criar a tabela "Clientes"
CREATE TABLE Clientes (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    CPF VARCHAR(11),
    Fidelidade BOOLEAN
);

-- Criar a tabela "Pratos"
CREATE TABLE Pratos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(100),
    Descricao TEXT,
    Valor DECIMAL(10, 2),
    Fidelidade DECIMAL(10, 2),
    Imagem VARCHAR(255),
    Ingredientes TEXT
);

-- table Pedidos
CREATE TABLE Pedidos (
    ID_Pedido INT AUTO_INCREMENT PRIMARY KEY,
    ID_Mesa INT,
    ID_Prato INT,
    status VARCHAR(50),
    FOREIGN KEY (ID_Mesa) REFERENCES Mesa(ID),
    FOREIGN KEY (ID_Prato) REFERENCES Pratos(ID)
);



-- -------------------------------------------------------- --
-- ------COMANDOS TESTE, REMOVER NA VERSÃO DEFINITIVA------ --
-- -------------------------------------------------------- --


 INSERT INTO `Clientes` (`ID`, `CPF`, `Fidelidade`) VALUES (NULL, '12345678910', '0');

INSERT INTO `Mesa` (`ID`, `Status`, `Senha`) VALUES (NULL, '0', 'senha');


-- boolean: 0=false || 1=true
-- comando insert--
--          INSERT INTO `mesa` (`ID`, `Status`, `senha`) VALUES (NULL, '1', 'senha');