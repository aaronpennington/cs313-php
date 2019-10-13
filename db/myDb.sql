
CREATE TABLE public.user
(
  id SERIAL NOT NULL PRIMARY KEY,
  username VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(100) NOT NULL,
  display_name VARCHAR(100) NOT NULL
);

CREATE TABLE public.post
(
  id SERIAL NOT NULL PRIMARY KEY,
  content TEXT NOT NULL,
  post_date DATE NOT NULL,
  user_id INT NOT NULL REFERENCES public.user(id)
);

-- Note that this table includes a foreign key
CREATE TABLE public.comment
(
  id SERIAL NOT NULL PRIMARY KEY,
  content TEXT NOT NULL,
  comment_date DATE NOT NULL,
  post_id INT NOT NULL REFERENCES public.post(id),
  user_id INT NOT NULL REFERENCES public.user(id)
);