
import javax.swing.JOptionPane;

public class Exercicio__01 {

    public static void main(String[] args) {
        String numero = JOptionPane.showInputDialog(null, "Insira número desejado: ", JOptionPane.INFORMATION_MESSAGE);
        int number1 = Integer.parseInt(numero);

        //PAR OU ÍMPAR.
        String par_impar = Par_e_Impar(number1);
        JOptionPane.showMessageDialog(null, par_impar);
        //POSITIVO OU NEGATIVO.
        String positivo = n_e_positivo(number1);
        JOptionPane.showMessageDialog(null, positivo);
        //É PRIMO OU NÃO É PRIMO.
        String negativo = n_primo(number1);
        JOptionPane.showMessageDialog(null, negativo);
    }

    public static String n_e_positivo(int numero) {
        if (numero >= 0) {
            return "NÚMERO POSITIVO!!";
        } else {
            return "NÚMERO NEGATIVO!!";
        }

    }

    public static String n_primo(int n1) {
        int contador = 0;
        for (int j = 1; j <= n1; j++) {
            if (n1 % j == 0) {
                contador++;
            }
        }
        if (contador == 2) {
            return "NUMERO É PRIMO";
        } else {
            return "NÚMERO NÃO É PRIMO";
        }
    }

    public static String Par_e_Impar(int numero) {
        if (numero % 2 == 0) {
            return "NÚMERO PAR!!";
        } else {
            return "NÚMERO IMPAR!!";
        }
    }
}
