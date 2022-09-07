/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package servidortcp;

import java.io.IOException;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.Scanner;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author gin
 */
public class ServidorTCP implements Runnable{
    
    private ServerSocket servidor;
    static int teste = 2; 
    
    int teste2 = 5;

    
    @Override
    public void run() {
       try {
            
                        
            escutar(2018);
        } catch (IOException ex) {
            Logger.getLogger(ServidorTCP.class.getName()).log(Level.SEVERE, null, ex);
        } 
    }
    
    
    public ServidorTCP() {
        
        try {
            
                        
            escutar(1234);
        } catch (IOException ex) {
            Logger.getLogger(ServidorTCP.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }

    
    
    private void escutar(Integer porta) throws IOException{
        
        System.out.println("teste2 = " + teste2);
        
        servidor = new ServerSocket(porta);
        
        System.out.println("aguardando conexão na porta: "+porta);
        
        Socket entrada = servidor.accept();
        
        String ip = entrada.getInetAddress().getHostAddress();
        
        System.out.println("conexão recebida com: " + ip );
        
        
        Scanner sc = new Scanner(entrada.getInputStream());
        
        while( sc.hasNextLine() ){
            System.out.println("["+ip+"]: "+ sc.nextLine());
            
        }
        
        sc.close();
        entrada.close();
        servidor.close();
        
        
    }
    
    
    

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        
        
        System.out.println("teste = "+ teste);
        
        
        ServidorTCP s =  new ServidorTCP();
        
        System.out.println("teste2 = " + s.teste2);
    }

    
}
