# Eventos do SENAI
## Vamos criar uma página de eventos do SENAI

 - 1 Listagem e detalhes
Branch: feature/index-e-detalhes
Arquivos: index.php e detalhes.php
Listar os eventos, criar links para detalhes, edição e remoção e oferecer acesso ao cadastro. Nos detalhes,
mostrar todos os campos do evento. Tratar lista vazia e ID inexistente.

- 2 Cadastro de evento
Branch: feature/formularioCadastroEvento
Arquivos: cadastro.php
Exibir o formulário, validar os campos e cadastrar o evento na sessão com ID único. Após salvar, redirecionar
para index.php.

- 3 Edição de evento
Branch: feature/formularioEdicaoEvento
Arquivos: edicao.php
Receber o ID, carregar os dados no formulário e salvar as alterações mantendo o mesmo ID. Tratar ID
inexistente e redirecionar para index.php após salvar.

- 4 Remoção de evento
Branch: feature/formularioRemocaoEvento
Arquivos: remocao.php
Receber o ID, mostrar o evento e pedir confirmação. Oferecer a opção de cancelar. Remover somente após
confirmação por POST e voltar para index.php. Tratar ID inexistente.

