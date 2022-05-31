import random
import pygame
import lekcja1


class Jablko():
    #konstruktor klasy 
    def __init__(self):
        self.kolor=(255,0,0)
        self.applePostiton=(20,20)
        self.randomPosition()
    def setPosition(self,x,y):
        self.applePostiton=(x,y)
    def getPostition(self):
        return self.applePostiton
    def randomPosition(self):
        iloscKratek=lekcja1.rozdzielczosc//40-1
        xApple=random.randint(0,iloscKratek)*40+20
        yApple=random.randint(0,iloscKratek)*40+20
        self.setPosition(xApple,yApple)
    def drawApple(self,OknoGry):
        pygame.draw.circle(OknoGry,self.kolor,(self.applePostiton
        [0],self.applePostiton[1]),20)
