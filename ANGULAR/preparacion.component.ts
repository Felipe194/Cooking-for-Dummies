import { Component, OnInit } from '@angular/core';
import{IngredientesService} from '../Servicios/ingredientes.service';
import {HttpClient} from '@angular/common/http';
import {ActivatedRoute, Router} from '@angular/router';

import {Ingrediente}from '../Interfaces/ingrediente';


@Component({
  selector: 'app-preparacion',
  templateUrl: './preparacion.component.html',
  styleUrls: ['./preparacion.component.css']
})
export class PreparacionComponent implements OnInit {
  API_ENDPOINT='http://localhost:8000/api';
  ingredientes:Ingrediente[];
  platos:Platos[];
  codigo=+this._route.snapshot.paramMap.get('id');;


    constructor(private _route:ActivatedRoute,
                private ingredienteService:IngredientesService,
                private httpClient:HttpClient){
    httpClient.get(this.API_ENDPOINT+'/platos').subscribe((data:Platos[])=>{
      this.platos=data;
    })
      httpClient.get(this.API_ENDPOINT+'/ingredientes').subscribe((data:Ingrediente[])=>{

        this.ingredientes=data;
        console.log(data);
      })



    }
  ngOnInit() {
    let id= +this._route.snapshot.paramMap.get('id');
    console.log(id);

  }

  }
