import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Ballin } from '../interfaces/ballin.interfaces';
import { BallinStats } from '../interfaces/ballinstats.interfaces';

@Injectable({
  providedIn: 'root'
})
export class BallinService {
  constructor(public http : HttpClient) { }
  public getResponse(page:number):Observable<Ballin>{
    return this.http.get<Ballin>('https://www.balldontlie.io/api/v1/players/?per_page=100&page='+page)
  }

  public getResponseStats(id:number):Observable<Ballin>{
    return this.http.get<Ballin>('https://www.balldontlie.io/api/v1/stats/?player_ids[]='+id)
  }
}
