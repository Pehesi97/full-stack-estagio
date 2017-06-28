# Teste Full-Stack Developer (Estágio)
Teste para vaga de estágio [Full-Stack Developer](http://jobs.tracksale.co/o/estagio-fullstack-developer) na Tracksale 

## Descrição
Criar uma aplicação simples para simular um sistema de _Todo List_ utilizando uma comunicação RESTful com o frontend.

O backend tem o propósito de lista os dados e de realizar algumas consultas simples nos dados. Não se preocupe em manter as alterações do frontend no backend.

Os _Todo List_ possuem os seguintes atributos:

 - Nome
 - Lista de tarefas
 — Nome da tarefa
 — Status (está concluída ou não)

Ex.:

_Todo List_: **Jantar para os amigos**
*Tarefas*:

 1. Escolher a receita (concluída)
 2. Comprar os ingredientes (concluída)
 3. Convidar os amigos
 4. Comprar as bebidas
 5. Arrumar a casa

![Exemplo de Todo List](https://i.imgur.com/Mqh9wOJ.png)

### Checklist frontend

- [ ] Exibir todos os _Todo List_ e suas tarefas. Exemplo (não se preocupe com layout):
![Exemplo de Interface](https://i.imgur.com/9uSCR7C.png)
- [ ] Criar uma caixa de pesquisa para filtrar os _Todo List_ pelo nome;
- [ ] Implementar no frontend a funcionalidade de concluir tarefa.

O frontend pode ser desenvolvido utilizando qualquer biblioteca ou framework. Utilizar Angular 4, VueJS 2.0 ou ReactJS é um diferencial.

### Checklist backend

- [ ] Listar todos os _Todo List_ no _endpoint_ GET /api/todo
- [ ] Vai ser preciso implementar o método _find_ no \App\TodoService.php
- [ ] Filtar os _Todo List_ no _endpoint_ GET /api/todo?q=exemplo

Exemplo para utilizar o TodoService:
```php
$items = \App\TodoService::getAll();
```
