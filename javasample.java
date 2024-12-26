import javafx.application.Application;
import javafx.scene.Scene;
import javafx.scene.web.WebView;
import javafx.stage.Stage;

public class VideoPlayerApp extends Application {

    @Override
    public void start(Stage primaryStage) {
         
        WebView webView = new WebView();
        webView.getEngine().load("samplevideo.html"); 

        
        Scene scene = new Scene(webView, 800, 600);

    
        primaryStage.setScene(scene);
        primaryStage.setTitle("Video Player Application");
        primaryStage.show();
    }

    public static void main(String[] args) {
        launch(args);
    }
}