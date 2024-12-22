# GabaldiMensWear - Sistema Web de E-commerce para Loja de Roupas

## Sobre o Projeto
Este sistema web foi desenvolvido para uma loja de roupas com o objetivo de alcançar um público maior e permitir que os clientes realizem compras online. Além disso, ele oferece funcionalidades administrativas para o gerenciamento de produtos, proporcionando maior controle ao proprietário.

## Funcionalidades Principais
- **Para os usuários (clientes):**
  - Visualização de produtos disponíveis.
  - Adição de produtos ao carrinho de compras.
  - Finalização de pedidos.

- **Para o administrador (proprietário):**
  - Cadastro, edição e exclusão de produtos.
  - Gestão de estoque.
  - Visualização de pedidos realizados.

## Tecnologias Utilizadas
- **Linguagem de Programação:** PHP
- **Frameworks:**
  - Laravel
  - Bootstrap (para estilização do frontend)
  - Livewire (para interações dinâmicas no frontend)
- **Banco de Dados:** MySQL

## Requisitos de Instalação
- PHP (versão 8.0 ou superior).
- Composer (para gerenciamento de dependências).
- MySQL (para banco de dados).
- Git (para clonar o repositório).

## Como Configurar e Executar o Sistema
1. Clone o repositório do projeto:
   ```bash
   git clone https://github.com/caua075/GabaldiMensWear.git
   ```
2. Navegue até o diretório do projeto:
   ```bash
   cd e-commerce-roupa
   ```
3. Instale as dependências do Laravel:
   ```bash
   composer install
   ```
4. Crie o arquivo `.env` com base no arquivo `.env.example`:
   ```bash
   cp .env.example .env
   ```
5. Configure o arquivo `.env` para conectar ao banco de dados MySQL:
   - Altere as variáveis de ambiente relacionadas ao banco de dados:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=nome_do_banco
     DB_USERNAME=usuario
     DB_PASSWORD=senha
     ```
6. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```
7. Execute as migrações para criar as tabelas no banco de dados:
   ```bash
   php artisan migrate
   ```
8. Inicie o servidor de desenvolvimento:
   ```bash
   php artisan serve
   ```
9. Acesse o sistema no navegador através do endereço:
   ```
   http://localhost:8000
   ```

## Observações
- Atualmente, o sistema está configurado para uso local. A hospedagem na internet não está implementada, mas poderá ser realizada no futuro.
- Caso queira personalizar o design ou as funcionalidades, edite os componentes Livewire e as views do Laravel.

## Contribuição
Contribuições são bem-vindas! Para contribuir:
1. Faça um fork do repositório.
2. Crie uma branch para sua feature ou correção:
   ```bash
   git checkout -b minha-feature
   ```
3. Faça o commit das alterações:
   ```bash
   git commit -m "Adicionando nova funcionalidade"
   ```
4. Envie as alterações para sua branch:
   ```bash
   git push origin minha-feature
   ```
5. Abra um pull request no repositório original.

---
**Desenvolvido por:** Cauã de Andrade Gonçalves
