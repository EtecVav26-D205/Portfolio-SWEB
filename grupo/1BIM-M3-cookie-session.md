# 📝 Exercícios — Cookies e Sessions em PHP

---

## 📌 Exercício 1 — Pergunta conceitual

**Explique a diferença entre cookies e sessions no PHP.**



## 📌 Exercício 2 — Pergunta de aplicação

**Sistema: Loja virtual**



## 📌 Exercício 3 — Pergunta de investigação

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
### **Resposta:**
### Após a primeira execução do apareceu a mensagem "Cookie ainda não disponível", isso deve pois o cookie foi cirado naquele momento, mas ainda não foi enviado para o navegador de volta.
Logo depois de atualizar a página, foi mostrado na tela "Valor do cookie: 1", isso porque nesse momento o navegador já recebeu o cookie criado.
Ao abrir as ferrmanetas de cookie, no contador de cookie é mostrado o valor 1.
E por fim, ao limpar o cookie do site, ao atualizar a tela, a mesma mensagem de quando o site foi aberto a primeira vez é mostrado "Cooki ainda não disponível".
---


## 📌 Exercício 4 — Pergunta de reflexão

**Por que sessions são geralmente preferidas para autenticação de usuários?**


