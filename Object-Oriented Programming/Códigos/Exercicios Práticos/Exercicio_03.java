
import javax.swing.JOptionPane;

public class Exercicio_03 {

    public static void main(String[] args) {

        /*
        Faça um programa em Java para 
        solicitar um número pelo teclado
        e imprimir o fatorial deste
         */
        String n1 = JOptionPane.showInputDialog(null, "Digite um número: ", JOptionPane.INFORMATION_MESSAGE);
        int aux = Integer.parseInt(n1);
        int fatorial = aux;
        while (--aux > 1) {
            fatorial = fatorial * aux;
        }
        JOptionPane.showMessageDialog(null, fatorial);
    }
}
