
# Eletronic Menu System

o projeto de TCC em questão é um sistema de cardápio onde o cliente do restaurante ira fazer seu proprio pedido
## Funcionalidades

- Fácilidade no uso
- Seguro contra invasão
- Monoplataforma (1440x960 px)
- Melhora no tempo de atendimento
- Menor quantia de funcionários requeridos para operação


## Instalação

Para Instalação:
- Baixe e instale o [Xampp](https://www.apachefriends.org/download.html)
- Baixe o [Composer](https://getcomposer.org/download/)
- Faça o clone dos arquivos do projeto na pasta ``htdocs`` no xampp
- Delete a pasta `vendor`
- na raiz do sistema instale o composer com:
```bash
composer install
```

- abra o CMD e execute 
```bash
ipconfig
```
ao conseguir o IPV4
feito 
- na maquina do cliente, entre em seu aplicativo de kiosque e navegador, e digite `{IPV4}/tcc/telassetup-clientes.php`
-na maquina do Gestor, entre em seu aplicativo de kiosque e navegador, e digite `{IPV4}/tcc/telassetup-gestao.php`
- na maquina do Salão, entre em seu aplicativo de kiosque e navegador, e digite `{IPV4}/tcc/telassetup-salao.php`
- na maquina da Cozinha, entre em seu aplicativo de kiosque e navegador, e digite `{IPV4}/tcc/telassetup-cozinha.php`

feito isso em todas as maquinas ao clicar no botão de inicialização o sistema entrará em modo de aguardo, para colocar o sistema em modo operante:
- abra o XAMPP Control Painel e clique no botão `start` do apache e MYsql
na mesma maquina entre em `localhost/phpmyadmin` crie um database chamado `tcc` e importe o arquivo `star.sql` na pasta sql na raiz do projeto, feito isso o sistema entrará em operação automaticamente (Em algumas configurações é possível que você tenha que recarregar nas maquinas cliente saão cozinha e ou gestão)
## Autores

- [@LucasJoseRocha](https://github.com/LucasJoseRocha)
- [@GMMendes01](https://github.com/GMMendes01)
- [@MGabriel011](https://github.com/MGabriel011)



## Licença

Todos os direitos estão reservados para os autores listados acima


