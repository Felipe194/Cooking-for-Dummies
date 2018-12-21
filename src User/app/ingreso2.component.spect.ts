import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ingreso1 } from './ingreso2.component';

describe('ingreso1Component', () => {
  let component: ingreso2Component;
  let fixture: ComponentFixture<ingreso1Component>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ingreso2Component ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ingreso2Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});