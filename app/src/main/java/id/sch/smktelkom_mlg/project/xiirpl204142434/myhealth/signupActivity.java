package id.sch.smktelkom_mlg.project.xiirpl204142434.myhealth;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;

import com.firebase.client.Firebase;


public class signupActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_signup);

        setTitle("Sign In");
        Firebase.setAndroidContext(this);

    }

}
