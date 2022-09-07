/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package servidortcp;

import java.io.IOException;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.DefaultListModel;
import javax.swing.JList;

/**
 *
 * @author gin
 */
public class Gerente implements Runnable{
    
    private ServerSocket servidor;
    private JList<String> conversa;
    private final ExecutorService threadPool = Executors.newFixedThreadPool(40);
    
    public Gerente(ServerSocket servidor, JList<String> conversa) throws IOException {
        this.servidor = servidor;
        this.conversa = conversa;
        
        
    }
    
    @Override
    public void run() {
        
        try {
                        
        
            while(true){
                Socket entrada = servidor.accept();

                String ip = entrada.getInetAddress().getHostAddress();
                System.out.println("conexão recebida com: " + ip );

                DefaultListModel<String> modelo = (DefaultListModel<String>) conversa.getModel();
                modelo.add(modelo.getSize(), "conexão recebida com: " + ip);
                //conversa.repaint();

                NovaConexao n = new NovaConexao(entrada, conversa);
                
                
                threadPool.submit( new Thread(n) );   
            }
            
        } catch (IOException ex) {
            Logger.getLogger(Gerente.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        threadPool.shutdown();
    }
    
}
