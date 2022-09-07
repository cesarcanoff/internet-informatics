package Teste;

import ContaCorrente.ContaCorrente;
import static java.lang.Float.parseFloat;
import static java.lang.Integer.parseInt;
import javax.swing.JOptionPane;

public class ContaUse {

    //default
    
    public static void main(String[] args) {
        ContaCorrente correntista = new ContaCorrente();
        ContaCorrente correntista1 = new ContaCorrente();
        ContaCorrente correntista2 = new ContaCorrente();
        int opcao1;
        do {
            String opcao = JOptionPane.showInputDialog("Insira a opção escolhida:"
                    + " \n 1 - Cadastrar 3 contas correntes: \n 2 - Depositar: \n 3 - Sacar  \n 4 - Sair do sistema");
            opcao1 = parseInt(opcao);
            switch (opcao1) {
                case 1:
                    String nomeE0 = JOptionPane.showInputDialog("Insira o nome do primeiro correntista : ");
                    correntista.setCorrentistaNome(nomeE0);
                    String numE0 = JOptionPane.showInputDialog("Insira o número da conta do primeiro corretista ");
                    correntista.setNumero(numE0);
                    String saldo0 = JOptionPane.showInputDialog("Insira o saldo da conta: ");
                    float saldoC0 = parseFloat(saldo0);
                    correntista.setSaldo(saldoC0);

                    String nomeE1 = JOptionPane.showInputDialog("Insira o nome do correntista: ");
                    correntista1.setCorrentistaNome(nomeE1);
                    String numE1 = JOptionPane.showInputDialog("Insira o número da conta do corretista " + nomeE1);
                    correntista1.setNumero(numE1);
                    String saldE1 = JOptionPane.showInputDialog("Insira o saldo da conta: ");
                    float saldoE1 = parseFloat(saldE1);
                    correntista1.setSaldo(saldoE1);

                    String nomeE2 = JOptionPane.showInputDialog("Insira o nome do correntista: ");
                    correntista2.setCorrentistaNome(nomeE2);
                    String numE2 = JOptionPane.showInputDialog("Insira o número da conta do corretista " + nomeE2);
                    correntista2.setNumero(numE2);
                    String saldE2 = JOptionPane.showInputDialog("Insira o saldo da conta: ");
                    float saldoE2 = parseFloat(saldE2);
                    correntista2.setSaldo(saldoE2);
                    break;
                case 2:
                    String a = JOptionPane.showInputDialog("Insira em qual conta deseja depositar: ");
                    switch (a) {
                        case "1":
                            String saldD1 = JOptionPane.showInputDialog("Insira o valor que deseja depositar");
                            float saldoD1 = parseFloat(saldD1);
                            JOptionPane.showMessageDialog(null, correntista.Depositar(saldoD1));
                            break;

                        case "2":
                            String saldD2 = JOptionPane.showInputDialog("Insira o valor que deseja depositar");
                            float saldoD2 = parseFloat(saldD2);
                            JOptionPane.showMessageDialog(null, correntista1.Depositar(saldoD2));
                            break;

                        case "3":
                            String saldD3 = JOptionPane.showInputDialog("Insira o valor que deseja depositar");
                            float saldoD3 = parseFloat(saldD3);
                            JOptionPane.showMessageDialog(null, correntista1.Depositar(saldoD3));
                    }
                    break;

                case 3:
                    String b = JOptionPane.showInputDialog("Insira em qual conta deseja sacar: ");
                    if ("1".equals(b)) {
                        String saldS0 = JOptionPane.showInputDialog("Insira o valor quer sacar");
                        float saldoS0 = parseFloat(saldS0);
                        if (correntista.getSaldo() == 0.0) {
                            JOptionPane.showMessageDialog(null, "Conta com saldo zero,"
                                    + " é preciso depositar alguma quantia para efetuar o saque desejado");
                        } else if (correntista.getSaldo() < saldoS0) {
                            JOptionPane.showMessageDialog(null, "Valor de saque indiponível,"
                                    + " o valor que desejou sacar é maior do que o saldo da conta presente,"
                                    + " por favor insira um valor igual ou menor que R$" + correntista.getSaldo());
                        }
                        correntista.Sacar(saldoS0);

                    } else if ("2".equals(b)) {
                        String saldS1 = JOptionPane.showInputDialog("Insira o valor desejado para sacar");
                        float saldoS1 = parseFloat(saldS1);
                        if (correntista1.getSaldo() == 0.0) {
                            JOptionPane.showMessageDialog(null, "Conta com saldo zero,"
                                    + " é preciso depositar alguma quantia para efetuar o saque desejado");
                        } else if (correntista1.getSaldo() < saldoS1) {
                            JOptionPane.showMessageDialog(null, "Valor de saque indiponível,"
                                    + " o valor que desejou sacar é maior do que o saldo da conta presente,"
                                    + " por favor insira um valor igual ou menor que R$" + correntista1.getSaldo());
                        }
                        correntista1.Sacar(saldoS1);

                    } else if ("3".equals(b)) {
                        String saldD2 = JOptionPane.showInputDialog("Insira o valor desejado para sacar");
                        float saldoD2 = parseFloat(saldD2);
                        if (correntista2.getSaldo() == 0.0) {
                            JOptionPane.showMessageDialog(null, "Conta com saldo zero,"
                                    + " é preciso depositar alguma quantia para efetuar o saque desejado");
                        } else if (correntista2.getSaldo() < saldoD2) {
                            JOptionPane.showMessageDialog(null, "Valor de saque indiponível,"
                                    + " o valor que desejou sacar é maior do que o saldo da conta presente,"
                                    + " por favor insira um valor igual ou menor que R$" + correntista2.getSaldo());

                        }
                        correntista2.Sacar(saldoD2);
                    }
                    break;
                case 4:
                    JOptionPane.showMessageDialog(null, "Saiu do sistema com sucesso!");
                    break;
                default:
                    JOptionPane.showMessageDialog(null, "Por favor, insira um número dentro das opções (1 a 4)");
            }
        } while (opcao1 == 1 || opcao1 == 2 || opcao1 == 3);
        correntista.mostrarSaldo();
        correntista1.mostrarSaldo();
        correntista2.mostrarSaldo();
    }
}
