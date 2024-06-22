#Forked from my company's Github to minitor the progress of the work and perform basic security testing
#Not designed to committ changes on the main repo.

#How to push from local machine to Github
#Clone your forked repository to your local machine
#git clone https://github.com/yourusername/<repo name>

#Change your current directory to the cloned repository
#cd python-<repo name>

#Remove the link to the original repository
#git remote remove origin

#Add a new remote link to the repository you just created on GitHub
#git remote add origin https://github.com/yourusername/new-repository.git .... copy from the new repository(https.....)

#Push the changes to the new repository
#git push -u origin master

#After you've pushed the changes to the new repository, you can delete the forked repository on GitHub. Note that this process will not preserve the forks, stars, or watchers of your original repository.
