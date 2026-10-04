# Loja de Jogos - Sistema de Gerenciamento

Este e um projeto web completo para gestao de uma Loja de Jogos, englobando interfaces de navegacao para o usuario e scripts backend em PHP para manipulacao e processamento de dados.

---

## Tecnologias Utilizadas

### Frontend
* **HTML5**: Estruturacao das paginas e formularios.
* **CSS3** (`css/style.css`): Estilizacao e design da aplicacao.
* **JavaScript** (`js/script.js`): Validacoes de formularios e interatividade do cliente.

### Backend
* **PHP**: Processamento de requisicoes, gestao de formularios e integracao com banco de dados.

### Controle de Versao
* **Git e GitHub**: Gerenciamento de codigo e versionamento em equipe.

---

## Estrutura do Projeto

```
loja-jogos/
├── css/
│   └── style.css            # Folha de estilos centralizada da aplicacao
├── js/
│   └── script.js            # Scripts de comportamento e interatividade
├── php/
│   ├── clientes.php         # Logica backend para gestao de clientes
│   ├── fornecedores.php     # Logica backend para fornecedores
│   ├── funcionarios.php     # Logica backend para funcionarios
│   ├── jogos.php            # Logica backend para catalogo de jogos
│   └── vendas.php           # Logica backend para registro e controle de vendas
├── clientes.html            # Interface para cadastro/consulta de clientes
├── fornecedores.html        # Interface para cadastro/consulta de fornecedores
├── funcionarios.html        # Interface para cadastro/consulta de funcionarios
├── index.html               # Pagina principal / Dashboard do sistema
├── jogos.html               # Interface para exibicao e cadastro de jogos
└── vendas.html              # Interface de registro de vendas
```

---

## Modulos do Sistema

### 1. Inicio (`index.html`)
Pagina inicial com acesso rapido aos principais modulos.

### 2. Clientes (`clientes.html` / `php/clientes.php`)
Modulo para controle e cadastro de clientes.

### 3. Jogos (`jogos.html` / `php/jogos.php`)
Gestao de inventario e catalogo de jogos disponiveis.

### 4. Vendas (`vendas.html` / `php/vendas.php`)
Registro de pedidos e transacoes de vendas.

### 5. Funcionarios (`funcionarios.html` / `php/funcionarios.php`)
Controle da equipe interna da loja.

### 6. Fornecedores (`fornecedores.html` / `php/fornecedores.php`)
Gestao de parcerias e fornecedores de produtos.

---

## Como Executar o Projeto

### Passo 1: Clonar o Repositorio
```bash
git clone https://github.com/seu-usuario/loja-jogos.git
cd loja-jogos
```

### Passo 2: Configurar o Servidor Local
* Mova a pasta `loja-jogos` para o diretorio do seu servidor local (ex: `htdocs` no XAMPP ou `www` no WAMP).
* Inicie os servicos do **Apache** e **MySQL** no seu painel de controle do servidor.

### Passo 3: Acessar a Aplicacao
* Abra o navegador e acesse: `http://localhost/loja-jogos/index.html`

---

## Organizacao do Trabalho no Git

### Estrutura de Branches
* **`main`**: Conteudo com a versao final e estavel do sistema com todas as paginas unificadas.
* **`branch-aluno-1`**: Desenvolvimento dos modulos especificos atribuidos ao Aluno 1.
* **`branch-aluno-2`**: Desenvolvimento dos modulos especificos atribuidos ao Aluno 2.