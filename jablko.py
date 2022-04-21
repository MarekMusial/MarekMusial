import random
import pygame


class Jablko():
    #konstruktor klasy 
    def __init__(self):
        self.kolor=(255,0,0)
        self.applePostiton=(20,20)
    def setPosition(self,x,y):
        self.applePostiton=(x,y)
    def getPostition(self):
        return self.applePostiton
    def randomPosition(self):
        xApple=random.randint(0,9)*40+20
        yApple=random.randint(0,9)*40+20
        self.setPosition(xApple,yApple)
    def drawApple(self,OknoGry):
        pygame.draw.circle(OknoGry,self.kolor,(self.applePostiton
        [0],self.applePostiton[1]),20)
