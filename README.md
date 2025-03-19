# 📊 Aplicativo de Gestão de Resultados no Mini Dólar (B3)

Este aplicativo foi desenvolvido para substituir a planilha eletrônica usada no Excel, permitindo o registro e análise dos ganhos e perdas diárias, semanais e mensais ao longo do ano. Ele foi criado para facilitar a gestão das operações realizadas na plataforma Profit Pro, no contrato de mini dólar na B3.

## 🚀 Tecnologias Utilizadas

O sistema foi desenvolvido utilizando a **TALL Stack**, que combina:

* **Tailwind CSS** – Estilização moderna e responsiva.

* **Alpine.js** – Comportamentos interativos sem complexidade.

* **Laravel** – Framework robusto para backend.

* **Livewire** – Componentes dinâmicos sem necessidade de JavaScript complexo.

## 🔥 Funcionalidades Principais

* ✅ Registro de operações diárias com dados detalhados

* ✅ Cálculo automático de ganhos e perdas semanais e mensais

* ✅ Visualização gráfica dos resultados

* ✅ Filtros avançados para análise de performance

* ✅ Interface responsiva e intuitiva

## 📦 Instalação e Configuração

### Pré-requisitos

Certifique-se de ter os seguintes requisitos instalados:

* PHP 8+

* Composer

* MySQL ou outro banco de dados compatível

* Node.js e npm (para dependências front-end)

### Passos para instalação

1. Clone este repositório:
   
```
git clone https://github.com/seu-usuario/seu-repositorio.git
cd seu-repositorio
```
2. Instale as dependências do Laravel e do front-end:

```
composer install
npm install && npm run dev
```

3. Copie o arquivo de ambiente e configure a conexão com o banco de dados:
```
cp .env.example .env
php artisan key:generate
```

4. Execute as migrações e seeds (se aplicável):

```
php artisan migrate --seed
```

5. Inicie o servidor de desenvolvimento:

```
php artisan serve
```


## 🤝 Contribuição

Sinta-se à vontade para abrir issues ou enviar pull requests!

## 📜 Licença

Este projeto está sob a licença MIT.

---
Desenvolvido com ❤️ e tecnologia para facilitar a gestão de operações financeiras! 🚀