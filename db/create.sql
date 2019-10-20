 -- There should be a One-to-Many relation BETWEEN users AND posts -- AND users AND comments.

CREATE TABLE public.user (
  id SERIAL NOT NULL PRIMARY KEY, 
  username VARCHAR(100) NOT NULL UNIQUE, 
  password VARCHAR(100) NOT NULL, 
  display_name VARCHAR(100) NOT NULL);

CREATE TABLE public.post (
  id SERIAL NOT NULL PRIMARY KEY, 
  title TEXT NOT NULL,
  subtitle TEXT,
  content TEXT NOT NULL, 
  post_date DATE NOT NULL, 
  user_id INT NOT NULL REFERENCES public.user(id)); 

-- It would also be advantageous to have a heirarchy of -- comments (allow for nested comment chains).

CREATE TABLE public.comment (
  id SERIAL NOT NULL PRIMARY KEY, 
  content TEXT NOT NULL, 
  comment_date DATE NOT NULL, 
  post_id INT NOT NULL REFERENCES public.post(id), 
  user_id INT NOT NULL REFERENCES public.user(id));