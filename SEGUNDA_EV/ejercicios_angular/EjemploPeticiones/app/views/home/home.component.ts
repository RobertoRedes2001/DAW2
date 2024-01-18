import { Component } from '@angular/core';
import { ServicioJoanService } from '../../services/servicio-joan.service';

@Component({
  selector: 'app-home',
  standalone: true,
  imports: [],
  templateUrl: './home.component.html',
  styleUrl: './home.component.css'
})
export class HomeComponent {
  public constructor(public service : ServicioJoanService ){}

  public getJoan() : void{
    this.service.getResponse().subscribe((response)=>{
      console.log(response);
    })
  }

  ngOnInit(){
    this.getJoan();
  }

}
