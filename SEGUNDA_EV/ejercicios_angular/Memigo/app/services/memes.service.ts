import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Memes } from '../interfaces/memes.interfaces';

@Injectable({
  providedIn: 'root'
})
export class MemesService {

  constructor(public http : HttpClient) { }
  public getResponse():Observable<Memes>{
    return this.http.get<Memes>('https://api.imgflip.com/get_memes')
  }
}
