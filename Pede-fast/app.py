from flask import Flask, render_template, request, url_for, redirect

from flask.ext.sqlalchemy import SQLAlchemy

app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///db.sqlite'

db = SQLAlchemy(app)

class Pessoa(db.Model):
    __tablename__ = 'produtos'
    _id = db.Column(db.Integer, primary_key=True,autoincrement=True)
    nome = db.Column(db.String)
    preço = db.Column(db.Float)
    categoria = db.Column(db.String)
    descriçao = db.Column(db.String)


def __init__(self,nome,preço,categoria,descriçao):
    self.nome = nome
    self.preço = preço
    self.categoria = categoria
    self.descriçao = descriçao


db.create_all()

@app.route("/index")
def index():
    return render_template("index.html")

if __name__ == "__main__":
    app.run()
