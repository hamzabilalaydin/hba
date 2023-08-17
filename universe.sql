--
-- PostgreSQL database dump
--

-- Dumped from database version 12.9 (Ubuntu 12.9-2.pgdg20.04+1)
-- Dumped by pg_dump version 12.9 (Ubuntu 12.9-2.pgdg20.04+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE universe;
--
-- Name: universe; Type: DATABASE; Schema: -; Owner: freecodecamp
--

CREATE DATABASE universe WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'C.UTF-8' LC_CTYPE = 'C.UTF-8';


ALTER DATABASE universe OWNER TO freecodecamp;

\connect universe

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: galaxy; Type: TABLE; Schema: public; Owner: freecodecamp
--

CREATE TABLE public.galaxy (
    galaxy_id integer NOT NULL,
    name character varying NOT NULL,
    has_life boolean NOT NULL,
    light_years integer,
    number_of_stars_in_billion integer,
    apparent_magnitude numeric(3,1),
    constellation text
);


ALTER TABLE public.galaxy OWNER TO freecodecamp;

--
-- Name: moon; Type: TABLE; Schema: public; Owner: freecodecamp
--

CREATE TABLE public.moon (
    moon_id integer NOT NULL,
    name character varying NOT NULL,
    planet_id integer NOT NULL,
    date_dicovered date,
    discovered_by text
);


ALTER TABLE public.moon OWNER TO freecodecamp;

--
-- Name: planet; Type: TABLE; Schema: public; Owner: freecodecamp
--

CREATE TABLE public.planet (
    planet_id integer NOT NULL,
    name character varying NOT NULL,
    arrived boolean NOT NULL,
    star_id integer NOT NULL,
    date_discovered date
);


ALTER TABLE public.planet OWNER TO freecodecamp;

--
-- Name: star; Type: TABLE; Schema: public; Owner: freecodecamp
--

CREATE TABLE public.star (
    star_id integer NOT NULL,
    name character varying NOT NULL,
    galaxy_id integer NOT NULL,
    distance_ly numeric(3,1),
    other_names text
);


ALTER TABLE public.star OWNER TO freecodecamp;

--
-- Name: universe_consist; Type: TABLE; Schema: public; Owner: freecodecamp
--

CREATE TABLE public.universe_consist (
    universe_consist_id integer NOT NULL,
    name character varying NOT NULL,
    percent integer
);


ALTER TABLE public.universe_consist OWNER TO freecodecamp;

--
-- Data for Name: galaxy; Type: TABLE DATA; Schema: public; Owner: freecodecamp
--

INSERT INTO public.galaxy VALUES (1, 'Milky Way', false, 26000, 250, 10.0, 'Sagittarius');
INSERT INTO public.galaxy VALUES (2, 'Andromeda Galaxy', false, 2500, NULL, NULL, 'Andromeda');
INSERT INTO public.galaxy VALUES (3, 'Antennea Galaxies', false, 45, NULL, NULL, 'Corvus');
INSERT INTO public.galaxy VALUES (4, 'Backward Galaxy', false, 2, NULL, NULL, 'Centaurus');
INSERT INTO public.galaxy VALUES (5, 'Black Eye Galaxy', false, 17, NULL, NULL, 'Coma Berenices');
INSERT INTO public.galaxy VALUES (6, 'Butterfly Galaxies', false, 60, NULL, NULL, 'Virgo');


--
-- Data for Name: moon; Type: TABLE DATA; Schema: public; Owner: freecodecamp
--

INSERT INTO public.moon VALUES (1, 'The Moon', 3, NULL, NULL);
INSERT INTO public.moon VALUES (2, 'Phobos', 4, NULL, NULL);
INSERT INTO public.moon VALUES (3, 'Deimos', 4, NULL, NULL);
INSERT INTO public.moon VALUES (4, 'Ariel', 7, NULL, NULL);
INSERT INTO public.moon VALUES (5, 'Belinda', 7, NULL, NULL);
INSERT INTO public.moon VALUES (6, 'Bianca', 7, NULL, NULL);
INSERT INTO public.moon VALUES (7, 'Despina', 8, NULL, NULL);
INSERT INTO public.moon VALUES (8, 'Galatea', 8, NULL, NULL);
INSERT INTO public.moon VALUES (9, 'Halimede', 8, NULL, NULL);
INSERT INTO public.moon VALUES (10, 'Mimas', 6, NULL, NULL);
INSERT INTO public.moon VALUES (11, 'Enceladus', 6, NULL, NULL);
INSERT INTO public.moon VALUES (12, 'Tethys', 6, NULL, NULL);
INSERT INTO public.moon VALUES (13, 'Dione', 6, NULL, NULL);
INSERT INTO public.moon VALUES (14, 'Europa', 5, NULL, NULL);
INSERT INTO public.moon VALUES (15, 'Ganymede', 5, NULL, NULL);
INSERT INTO public.moon VALUES (16, 'Callisto', 5, NULL, NULL);
INSERT INTO public.moon VALUES (17, 'Io', 5, NULL, NULL);
INSERT INTO public.moon VALUES (18, 'Charon', 9, NULL, NULL);
INSERT INTO public.moon VALUES (19, 'Rhea', 6, NULL, NULL);
INSERT INTO public.moon VALUES (20, 'Dia', 5, NULL, NULL);


--
-- Data for Name: planet; Type: TABLE DATA; Schema: public; Owner: freecodecamp
--

INSERT INTO public.planet VALUES (1, 'Mercury', false, 1, NULL);
INSERT INTO public.planet VALUES (2, 'Venus', false, 1, NULL);
INSERT INTO public.planet VALUES (3, 'Earth', true, 1, NULL);
INSERT INTO public.planet VALUES (4, 'Mars', true, 1, NULL);
INSERT INTO public.planet VALUES (5, 'Jupiter', false, 1, NULL);
INSERT INTO public.planet VALUES (6, 'Saturn', false, 1, NULL);
INSERT INTO public.planet VALUES (7, 'Uranus', false, 1, NULL);
INSERT INTO public.planet VALUES (8, 'Neptune', false, 1, NULL);
INSERT INTO public.planet VALUES (9, 'Pluto', false, 1, NULL);
INSERT INTO public.planet VALUES (10, 'Ceres', false, 1, NULL);
INSERT INTO public.planet VALUES (11, 'Makemake', false, 1, NULL);
INSERT INTO public.planet VALUES (12, 'Haumea', false, 1, NULL);
INSERT INTO public.planet VALUES (13, 'Eris', false, 1, NULL);


--
-- Data for Name: star; Type: TABLE DATA; Schema: public; Owner: freecodecamp
--

INSERT INTO public.star VALUES (1, 'Sun', 1, NULL, NULL);
INSERT INTO public.star VALUES (2, 'Polaris', 2, NULL, NULL);
INSERT INTO public.star VALUES (3, 'Sirius', 3, NULL, NULL);
INSERT INTO public.star VALUES (4, 'Betelgeuse', 4, NULL, NULL);
INSERT INTO public.star VALUES (5, 'Rigel', 5, NULL, NULL);
INSERT INTO public.star VALUES (6, 'Vega', 6, NULL, NULL);


--
-- Data for Name: universe_consist; Type: TABLE DATA; Schema: public; Owner: freecodecamp
--

INSERT INTO public.universe_consist VALUES (1, 'Dark Energy', 73);
INSERT INTO public.universe_consist VALUES (2, 'Dark Matter', 23);
INSERT INTO public.universe_consist VALUES (3, 'Normal Matter', 4);
INSERT INTO public.universe_consist VALUES (4, 'Neurinos', 2);


--
-- Name: galaxy galaxy_galaxy_id_key; Type: CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.galaxy
    ADD CONSTRAINT galaxy_galaxy_id_key UNIQUE (galaxy_id);


--
-- Name: galaxy galaxy_name_key; Type: CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.galaxy
    ADD CONSTRAINT galaxy_name_key UNIQUE (name);


--
-- Name: galaxy galaxy_pkey; Type: CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.galaxy
    ADD CONSTRAINT galaxy_pkey PRIMARY KEY (galaxy_id);


--
-- Name: moon moon_moon_id_key; Type: CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.moon
    ADD CONSTRAINT moon_moon_id_key UNIQUE (moon_id);


--
-- Name: moon moon_name_key; Type: CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.moon
    ADD CONSTRAINT moon_name_key UNIQUE (name);


--
-- Name: moon moon_pkey; Type: CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.moon
    ADD CONSTRAINT moon_pkey PRIMARY KEY (moon_id);


--
-- Name: planet planet_name_key; Type: CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.planet
    ADD CONSTRAINT planet_name_key UNIQUE (name);


--
-- Name: planet planet_pkey; Type: CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.planet
    ADD CONSTRAINT planet_pkey PRIMARY KEY (planet_id);


--
-- Name: planet planet_planet_id_key; Type: CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.planet
    ADD CONSTRAINT planet_planet_id_key UNIQUE (planet_id);


--
-- Name: star star_name_key; Type: CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.star
    ADD CONSTRAINT star_name_key UNIQUE (name);


--
-- Name: star star_pkey; Type: CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.star
    ADD CONSTRAINT star_pkey PRIMARY KEY (star_id);


--
-- Name: star star_star_id_key; Type: CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.star
    ADD CONSTRAINT star_star_id_key UNIQUE (star_id);


--
-- Name: universe_consist universe_consist_pkey; Type: CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.universe_consist
    ADD CONSTRAINT universe_consist_pkey PRIMARY KEY (universe_consist_id);


--
-- Name: universe_consist universe_consist_universe_consist_id_key; Type: CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.universe_consist
    ADD CONSTRAINT universe_consist_universe_consist_id_key UNIQUE (universe_consist_id);


--
-- Name: moon moon_planet_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.moon
    ADD CONSTRAINT moon_planet_id_fkey FOREIGN KEY (planet_id) REFERENCES public.planet(planet_id);


--
-- Name: planet planet_star_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.planet
    ADD CONSTRAINT planet_star_id_fkey FOREIGN KEY (star_id) REFERENCES public.star(star_id);


--
-- Name: star star_galaxy_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: freecodecamp
--

ALTER TABLE ONLY public.star
    ADD CONSTRAINT star_galaxy_id_fkey FOREIGN KEY (galaxy_id) REFERENCES public.galaxy(galaxy_id);


--
-- PostgreSQL database dump complete
--

