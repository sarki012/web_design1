/*function changeBackgroundColor() {
    document.getElementById("divsection").style.backgroundColor = "green";
 }*/

const express = require("express");
const app = express();

app.get("/", (req, res) => {
  res.send("Welcome to the homepage.");
});

app.listen(3000, () => {
  console.log("App is running!");
});