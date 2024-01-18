import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Memigo } from '../interfaces/memes.interfaces';

@Injectable({
  providedIn: 'root'
})
export class MemesService {

  constructor(public http : HttpClient) { }
  public getResponse():Observable<Memigo>{
    return this.http.get<Memigo>('https://api.imgflip.com/get_memes')
  }
}
