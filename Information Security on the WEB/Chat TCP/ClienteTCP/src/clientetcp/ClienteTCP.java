/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package clientetcp;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.io.PrintStream;
import java.net.Socket;
import java.util.Scanner;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author gin
 */
public class ClienteTCP {

    private Socket cliente;
    private final int port = 2020;
    
    public ClienteTCP() {
        try{
            

            falar("127.0.0.1", port);
        }
        catch(IOException ex){
            System.out.println("ferrou");
        }
        
    }
    
    
    private void falar(String ip, Integer porta) throws IOException{
        cliente = new Socket(ip, porta);
        
        System.out.println("conexão com o servidor "+ip+" estabelecida!");
        
        PrintStream remetente = new PrintStream( cliente.getOutputStream() );
        //BufferedWriter bw     =  new BufferedWriter(new OutputStreamWriter(remetente));
        
        Scanner sc = new Scanner( System.in );
        
        BufferedReader br = new BufferedReader( new InputStreamReader( cliente.getInputStream() ));
        
        String texto = "";
        
        
        while( ! texto.equals("sair") && ! cliente.isClosed()){
            
            texto = sc.nextLine();
            
            
            System.out.println("erro? -> "+remetente.checkError());
            
            //escreve no socket
           // bw.newLine();
            remetente.println(texto);
            //bw.newLine();
            remetente.flush();
            
            
            
            System.out.println("enviado!");
            
        }
        
        remetente.close();
        sc.close();
        cliente.close();
        
        
    }
    

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        new ClienteTCP();
    }
    
}
