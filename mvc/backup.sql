PGDMP                         {            trabalho    14.5    14.5 4    '           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            (           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            )           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            *           1262    42531    trabalho    DATABASE     h   CREATE DATABASE trabalho WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Portuguese_Brazil.1252';
    DROP DATABASE trabalho;
                postgres    false            �            1259    42566 	   categoria    TABLE     c   CREATE TABLE public.categoria (
    id bigint NOT NULL,
    nome character varying(50) NOT NULL
);
    DROP TABLE public.categoria;
       public         heap    postgres    false            �            1259    42565    categoria_id_seq    SEQUENCE     y   CREATE SEQUENCE public.categoria_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.categoria_id_seq;
       public          postgres    false    214            +           0    0    categoria_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.categoria_id_seq OWNED BY public.categoria.id;
          public          postgres    false    213            �            1259    42590    estoque    TABLE     q   CREATE TABLE public.estoque (
    id bigint NOT NULL,
    produto_id integer,
    quantidade integer NOT NULL
);
    DROP TABLE public.estoque;
       public         heap    postgres    false            �            1259    42589    estoque_id_seq    SEQUENCE     w   CREATE SEQUENCE public.estoque_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.estoque_id_seq;
       public          postgres    false    218            ,           0    0    estoque_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.estoque_id_seq OWNED BY public.estoque.id;
          public          postgres    false    217            �            1259    42602    ordem_compra    TABLE     �   CREATE TABLE public.ordem_compra (
    id bigint NOT NULL,
    data_compra timestamp without time zone NOT NULL,
    usuario_id integer,
    produto_id integer
);
     DROP TABLE public.ordem_compra;
       public         heap    postgres    false            �            1259    42601    ordem_compra_id_seq    SEQUENCE     |   CREATE SEQUENCE public.ordem_compra_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.ordem_compra_id_seq;
       public          postgres    false    220            -           0    0    ordem_compra_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.ordem_compra_id_seq OWNED BY public.ordem_compra.id;
          public          postgres    false    219            �            1259    42573    produto    TABLE     �   CREATE TABLE public.produto (
    id bigint NOT NULL,
    categoria_id bigint NOT NULL,
    descricao character varying(100) NOT NULL,
    preco numeric(10,2) NOT NULL,
    roedor_id integer
);
    DROP TABLE public.produto;
       public         heap    postgres    false            �            1259    42572    produto_id_seq    SEQUENCE     w   CREATE SEQUENCE public.produto_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.produto_id_seq;
       public          postgres    false    216            .           0    0    produto_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.produto_id_seq OWNED BY public.produto.id;
          public          postgres    false    215            �            1259    42559    roedor    TABLE     c   CREATE TABLE public.roedor (
    id bigint NOT NULL,
    especie character varying(50) NOT NULL
);
    DROP TABLE public.roedor;
       public         heap    postgres    false            �            1259    42558    roedor_id_seq    SEQUENCE     v   CREATE SEQUENCE public.roedor_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.roedor_id_seq;
       public          postgres    false    212            /           0    0    roedor_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.roedor_id_seq OWNED BY public.roedor.id;
          public          postgres    false    211            �            1259    42550    usuario    TABLE       CREATE TABLE public.usuario (
    id bigint NOT NULL,
    flg_admin boolean NOT NULL,
    nome character varying(100) NOT NULL,
    email character varying(100) NOT NULL,
    senha character varying(50) NOT NULL,
    telefone character varying(50) NOT NULL
);
    DROP TABLE public.usuario;
       public         heap    postgres    false            �            1259    42549    usuario_id_seq    SEQUENCE     w   CREATE SEQUENCE public.usuario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.usuario_id_seq;
       public          postgres    false    210            0           0    0    usuario_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.usuario_id_seq OWNED BY public.usuario.id;
          public          postgres    false    209            w           2604    42569    categoria id    DEFAULT     l   ALTER TABLE ONLY public.categoria ALTER COLUMN id SET DEFAULT nextval('public.categoria_id_seq'::regclass);
 ;   ALTER TABLE public.categoria ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    213    214    214            y           2604    42593 
   estoque id    DEFAULT     h   ALTER TABLE ONLY public.estoque ALTER COLUMN id SET DEFAULT nextval('public.estoque_id_seq'::regclass);
 9   ALTER TABLE public.estoque ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    218    217    218            z           2604    42605    ordem_compra id    DEFAULT     r   ALTER TABLE ONLY public.ordem_compra ALTER COLUMN id SET DEFAULT nextval('public.ordem_compra_id_seq'::regclass);
 >   ALTER TABLE public.ordem_compra ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    219    220            x           2604    42576 
   produto id    DEFAULT     h   ALTER TABLE ONLY public.produto ALTER COLUMN id SET DEFAULT nextval('public.produto_id_seq'::regclass);
 9   ALTER TABLE public.produto ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    216    216            v           2604    42562 	   roedor id    DEFAULT     f   ALTER TABLE ONLY public.roedor ALTER COLUMN id SET DEFAULT nextval('public.roedor_id_seq'::regclass);
 8   ALTER TABLE public.roedor ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    211    212    212            u           2604    42553 
   usuario id    DEFAULT     h   ALTER TABLE ONLY public.usuario ALTER COLUMN id SET DEFAULT nextval('public.usuario_id_seq'::regclass);
 9   ALTER TABLE public.usuario ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    209    210    210                      0    42566 	   categoria 
   TABLE DATA           -   COPY public.categoria (id, nome) FROM stdin;
    public          postgres    false    214   L8       "          0    42590    estoque 
   TABLE DATA           =   COPY public.estoque (id, produto_id, quantidade) FROM stdin;
    public          postgres    false    218   �8       $          0    42602    ordem_compra 
   TABLE DATA           O   COPY public.ordem_compra (id, data_compra, usuario_id, produto_id) FROM stdin;
    public          postgres    false    220   �8                  0    42573    produto 
   TABLE DATA           P   COPY public.produto (id, categoria_id, descricao, preco, roedor_id) FROM stdin;
    public          postgres    false    216   �8                 0    42559    roedor 
   TABLE DATA           -   COPY public.roedor (id, especie) FROM stdin;
    public          postgres    false    212   �:                 0    42550    usuario 
   TABLE DATA           N   COPY public.usuario (id, flg_admin, nome, email, senha, telefone) FROM stdin;
    public          postgres    false    210   �:       1           0    0    categoria_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.categoria_id_seq', 6, true);
          public          postgres    false    213            2           0    0    estoque_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.estoque_id_seq', 1, false);
          public          postgres    false    217            3           0    0    ordem_compra_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.ordem_compra_id_seq', 1, false);
          public          postgres    false    219            4           0    0    produto_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.produto_id_seq', 32, true);
          public          postgres    false    215            5           0    0    roedor_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.roedor_id_seq', 5, true);
          public          postgres    false    211            6           0    0    usuario_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.usuario_id_seq', 1, true);
          public          postgres    false    209            �           2606    42571    categoria categoria_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.categoria
    ADD CONSTRAINT categoria_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.categoria DROP CONSTRAINT categoria_pkey;
       public            postgres    false    214            �           2606    42595    estoque estoque_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.estoque
    ADD CONSTRAINT estoque_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.estoque DROP CONSTRAINT estoque_pkey;
       public            postgres    false    218            �           2606    42607    ordem_compra ordem_compra_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.ordem_compra
    ADD CONSTRAINT ordem_compra_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.ordem_compra DROP CONSTRAINT ordem_compra_pkey;
       public            postgres    false    220            �           2606    42578    produto produto_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.produto
    ADD CONSTRAINT produto_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.produto DROP CONSTRAINT produto_pkey;
       public            postgres    false    216            �           2606    42564    roedor roedor_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.roedor
    ADD CONSTRAINT roedor_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.roedor DROP CONSTRAINT roedor_pkey;
       public            postgres    false    212            |           2606    42557    usuario usuario_email_key 
   CONSTRAINT     U   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_email_key UNIQUE (email);
 C   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_email_key;
       public            postgres    false    210            ~           2606    42555    usuario usuario_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_pkey;
       public            postgres    false    210            �           2606    42596    estoque estoque_produto_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.estoque
    ADD CONSTRAINT estoque_produto_id_fkey FOREIGN KEY (produto_id) REFERENCES public.produto(id);
 I   ALTER TABLE ONLY public.estoque DROP CONSTRAINT estoque_produto_id_fkey;
       public          postgres    false    3204    218    216            �           2606    42613 )   ordem_compra ordem_compra_produto_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.ordem_compra
    ADD CONSTRAINT ordem_compra_produto_id_fkey FOREIGN KEY (produto_id) REFERENCES public.produto(id);
 S   ALTER TABLE ONLY public.ordem_compra DROP CONSTRAINT ordem_compra_produto_id_fkey;
       public          postgres    false    220    216    3204            �           2606    42608 )   ordem_compra ordem_compra_usuario_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.ordem_compra
    ADD CONSTRAINT ordem_compra_usuario_id_fkey FOREIGN KEY (usuario_id) REFERENCES public.usuario(id);
 S   ALTER TABLE ONLY public.ordem_compra DROP CONSTRAINT ordem_compra_usuario_id_fkey;
       public          postgres    false    210    220    3198            �           2606    42584 !   produto produto_categoria_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.produto
    ADD CONSTRAINT produto_categoria_id_fkey FOREIGN KEY (categoria_id) REFERENCES public.categoria(id);
 K   ALTER TABLE ONLY public.produto DROP CONSTRAINT produto_categoria_id_fkey;
       public          postgres    false    214    3202    216            �           2606    42579    produto produto_roedor_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.produto
    ADD CONSTRAINT produto_roedor_id_fkey FOREIGN KEY (roedor_id) REFERENCES public.roedor(id);
 H   ALTER TABLE ONLY public.produto DROP CONSTRAINT produto_roedor_id_fkey;
       public          postgres    false    3200    216    212               X   x�3�J<����|.#N������b�T���̼��b.cN�Լ|.N�����Û�2�L9�S���Ss��8��2�
KSS��1z\\\ ~.�      "      x������ � �      $      x������ � �          �  x�]�Ar�0E��)t��H���l<M�v���`�3�Ҵ��tу�b�$F�������	G����7m ���,A
��+�GJ sQ߶��@i��̺�WSq�S
d�������c ��ZԷ��/�$�E�Ds�[ϟC���`�(��f�M�g�mpY�?��'�;��d8)�tL������&�"�߸�G���H�͊&5hx"�cG�	��-TV,}s'<!�&��͎�F�gi0����S�����2K�%��C��;��H�*���\y�w����P������Jr�mz	�^�ԍs�5Bi0�\�g�䃪�x`���8Et��ʰ�J1����6����3�wr�^g��Jϛe�����91]A�����r@��ʛP{vO-rr�y%t��c��؛y����C�l�0�|���E+��_�v�	L��B������         :   x�3�t�O����2��H�-.I-�2�J,��2�)��r:gd�%gd�$r��qqq ��@         :   x�3�,�tL����,.)J,�/�L���^r~.gdxPIb��-���%��=... ]M�     