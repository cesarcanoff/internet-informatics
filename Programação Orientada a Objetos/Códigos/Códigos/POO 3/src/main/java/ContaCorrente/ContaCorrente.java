package ContaCorrente;

import CorrentistaN.CorrentistaN;

public class ContaCorrente {

    private String correntistaNome;
    private String numero;
    private double saldo;
    private CorrentistaN titular;

    public ContaCorrente(String nome, String numero, double saldo) {
        this.correntistaNome = nome;
        this.numero = numero;
        this.saldo = saldo;
    }

    public ContaCorrente() {
    }

    public boolean Depositar(float saldo) {
        if (saldo < 0) {
            return false;
        } else {
            this.saldo += saldo;
            return true;
        }
    }

    public boolean Sacar(float saldo) {
        if (saldo < 0 || saldo > this.saldo) {
            return false;
        } else {
            this.saldo -= saldo;
            return true;
        }
    }
    
    public void mostrarSaldo(){ 
        System.out.println("O correntista " + this.correntistaNome + 
                " com o número de conta " + this.numero + " tem R$" + this.saldo + " de saldo");
    }

    public String getCorrentistaNome() {
        return correntistaNome;
    }

    public void setCorrentistaNome(String CorrentistaNome) {
        this.correntistaNome = CorrentistaNome;
    }

    public String getNumero() {
        return numero;
    }

    public void setNumero(String numero) {
        this.numero = numero;
    }

    public double getSaldo() {
        return saldo;
    }

    public void setSaldo(double saldo) {
        this.saldo = saldo;
    }
}
