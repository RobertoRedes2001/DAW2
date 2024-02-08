import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { RickyMorty } from '../interfaces/rickymorty.interfaces';

@Injectable({
  providedIn: 'root'
})
export class RickymortyService {
  constructor(public http : HttpClient) { }
  public getResponse(name : string,page:number):Observable<RickyMorty>{
    return this.http.get<RickyMorty>('https://rickandmortyapi.com/api/character/?name='+name+'&page='+page)
  }
}
