import { Component, OnInit } from '@angular/core';
import{IngredientesService} from '../Servicios/ingredientes.service';
import {HttpClient} from '@angular/common/http';
import {Ingrediente}from '../Interfaces/ingrediente';

@Component({
  selector: 'app-planificador',
  templateUrl: './planificador.component.html',
  styleUrls: ['./planificador.component.css']
})
export class PlanificadorComponent implements OnInit {
  API_ENDPOINT='http://localhost:8000/api';
  ingredientes:Ingrediente[];
    constructor(private ingredienteService:IngredientesService, private httpClient:HttpClient){
      httpClient.get(this.API_ENDPOINT+'/ingredientes').subscribe((data:Ingrediente[])=>{
        this.ingredientes=data;
        console.log(data);


      })

    }
  ngOnInit() {
  }

}
