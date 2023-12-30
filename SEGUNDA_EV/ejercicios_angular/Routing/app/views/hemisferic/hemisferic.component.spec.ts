import { ComponentFixture, TestBed } from '@angular/core/testing';

import { HemisfericComponent } from './hemisferic.component';

describe('HemisfericComponent', () => {
  let component: HemisfericComponent;
  let fixture: ComponentFixture<HemisfericComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [HemisfericComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(HemisfericComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
