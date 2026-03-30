# 📝 Exercícios — Cookies e Sessions em PHP

---

### 📌 Exercício 1 — Pergunta conceitual

**Explique a diferença entre cookies e sessions no PHP.**

Os cookies definem um padrão atraves do navegador do usuário dentro do PHP, já as sessions são uma forma de guardar os dados dentro do servidor, ou seja, mais seguras. Se o usuário pretende guardar informações mais sigilosas como senhas e dados pessoais as sessions serão mais vantajosas pois guardam no servidor os dados, porém se for um usuário que usa sempre o mesmo aparelho os cookies são mais úteis pois guardam questões mais triviais, como preferência por cor da tela por exemplo.



### 📌 Exercício 2 — Pergunta de aplicação

**Sistema: Loja virtual**
 <br>
No caso de desenvolvimento de uma loja virtual é só usar os cookies e as sessions juntos para dar certo. Supondo que seja uma loja de suplementos para atletas: para mantes o usuário logado toda vez que ele abrir o site eu usaria os cookies, ele criaria um codigo que armazena as informações de cadastro, para ajudar o cliente a se organizar nos seus interesses usaria também os cookies para desenvolver um carrinho por exemplo e uma área de "visualizados recentemente", porém para organizar os cadastro de dezenas de usuários diferentes precisaria usar os sessions para guardar as informações pessoais de cada um seguro.


### 📌 Exercício 3 — Pergunta de investigação

### 🔧 Código utilizado:

```php
<?php

setcookie("contador", "1", time()+3600);

if(isset($_COOKIE["contador"])) {
    echo "Valor do cookie: " . $_COOKIE["contador"];
} else {
    echo "Cookie ainda não disponível.";
}

?>
```
### **Resposta:** <br>Após a primeira execução do apareceu a mensagem "Cookie ainda não disponível", isso deve pois o cookie foi cirado naquele momento, mas ainda não foi enviado para o navegador de volta. Logo depois de atualizar a página, foi mostrado na tela "Valor do cookie: 1", isso porque nesse momento o navegador já recebeu o cookie criado. Ao abrir as ferrmanetas de cookie, no contador de cookie é mostrado o valor 1. E por fim, ao limpar o cookie do site, ao atualizar a tela, a mesma mensagem de quando o site foi aberto a primeira vez é mostrado "Cookie ainda não disponível".

---

```

## 📌 Exercício 4 — Pergunta de reflexão

**Por que sessions são geralmente preferidas para autenticação de usuários?**

###**Resposta:** <br> As sessions são preferidas para autenticação porque armazenam os dados no servidor, tornando o processo mais seguro do que cookies, que ficam no navegador e podem ser manipulados. Com sessions, o usuário recebe apenas um identificador, enquanto as informações sensíveis ficam protegidas. Além disso, o controle é maior, pois o servidor pode encerrar a sessão a qualquer momento. Já os cookies podem ser alterados ou interceptados, oferecendo riscos se usados para dados importantes. Por isso, sessions são mais seguras e confiáveis para login de usuários.

---


