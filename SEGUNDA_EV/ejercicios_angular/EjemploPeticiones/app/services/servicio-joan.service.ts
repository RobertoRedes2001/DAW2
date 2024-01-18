import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Cat } from '../interfaces/response.interface';

@Injectable({
  providedIn: 'root'
})
export class ServicioJoanService {

  constructor(public http : HttpClient) { }
  public getResponse():Observable<Cat>{
    return this.http.get<Cat>('https://api.thecatapi.com/v1/images/search?size=full')
  }
}
