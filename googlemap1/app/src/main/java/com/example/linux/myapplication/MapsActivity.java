package com.example.linux.myapplication;

import android.support.v4.app.FragmentActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.RadioButton;

import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;

public class MapsActivity extends FragmentActivity implements OnMapReadyCallback {

    private GoogleMap mMap;

    // Latitude & Longitude
    private Double Latitude  = 16.4610081;
    private Double Longitude  = 102.8342285;


    // RadioButton
    RadioButton rdoNormal, rdoHybrid, rdoSatellite, rdoTerrain;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_maps);
        // Obtain the SupportMapFragment and get notified when the map is ready to be used.
        SupportMapFragment mapFragment = (SupportMapFragment) getSupportFragmentManager()
                .findFragmentById(R.id.map);
        mapFragment.getMapAsync(this);
    }


    /**
     * Manipulates the map once available.
     * This callback is triggered when the map is ready to be used.
     * This is where we can add markers or lines, add listeners or move the camera. In this case,
     * we just add a marker near Sydney, Australia.
     * If Google Play services is not installed on the device, the user will be prompted to install
     * it inside the SupportMapFragment. This method will only be triggered once the user has
     * installed Google Play services and returned to the app.
     */
    @Override
    public void onMapReady(GoogleMap googleMap) {

        mMap = googleMap;

        // Add a marker in Sydney and move the camera
        LatLng sydney = new LatLng( Latitude , Longitude );
        mMap.addMarker(new MarkerOptions().position(sydney).title("Marker in Sydney"));
        mMap.moveCamera(CameraUpdateFactory.newLatLng(sydney));

        //*** Focus & Zoom
        mMap.setMapType(com.google.android.gms.maps.GoogleMap.MAP_TYPE_HYBRID);
        mMap.animateCamera(CameraUpdateFactory.newLatLngZoom( sydney  , 17));

        //*** Zoom Control
        mMap.getUiSettings().setRotateGesturesEnabled(true);

        //*** RadioButton
        rdoNormal = (RadioButton)findViewById(R.id.rdoNormal);


    }


    RadioButton.OnClickListener myOptionOnClickListener = new RadioButton.OnClickListener()
    {
        public void onClick(View v)
        {

            // TODO Auto-generated method stub
            if(rdoNormal.isChecked())
            {
                mMap.setMapType(com.google.android.gms.maps.GoogleMap.MAP_TYPE_NORMAL);
            }


        }
    };


}
