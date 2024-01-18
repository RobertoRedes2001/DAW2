import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { GitHub } from '../interfaces/github.interfaces';

@Injectable({
  providedIn: 'root'
})
export class GithubService {

  constructor(public http : HttpClient) { }
  public getResponse(users : string):Observable<GitHub>{
    return this.http.get<GitHub>('https://api.github.com/search/users?q='+users)
  }
}
