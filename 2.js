// 2. Необходимо создать html-страницу с названием 2.html, в которой подключить файл 2.js (его тоже необходимо создать рядом с html-файлом). В js-файле необходимо создать следующий скрипт:
// Cоздать функцию greeting, которая принимает имя и выводит приветствие, используя переданное имя, в консоль.
// Необходимо у пользователя запросить имя и вызвать функцию greeting, передав туда данное значение.

function greeting () {
    const name_user = prompt("Введите ваше имя");
    return name_user;
} 

name_user = greeting();
console.log(`Приветствую ${name_user}.`);