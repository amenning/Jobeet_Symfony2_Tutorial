<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_22a863260f8c8bb5e36415cd381d8b1ca657c736d3be262c5498a6daa3358aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_185241e02c943f61d03ab8172643f643b176c53b4507bf4237bccdbd2957603a = $this->env->getExtension("native_profiler");
        $__internal_185241e02c943f61d03ab8172643f643b176c53b4507bf4237bccdbd2957603a->enter($__internal_185241e02c943f61d03ab8172643f643b176c53b4507bf4237bccdbd2957603a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_185241e02c943f61d03ab8172643f643b176c53b4507bf4237bccdbd2957603a->leave($__internal_185241e02c943f61d03ab8172643f643b176c53b4507bf4237bccdbd2957603a_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_298247ea90af39799e34b1dba2989e14d570f2ea6b8d122f8288b4dad384f73b = $this->env->getExtension("native_profiler");
        $__internal_298247ea90af39799e34b1dba2989e14d570f2ea6b8d122f8288b4dad384f73b->enter($__internal_298247ea90af39799e34b1dba2989e14d570f2ea6b8d122f8288b4dad384f73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>";
        
        $__internal_298247ea90af39799e34b1dba2989e14d570f2ea6b8d122f8288b4dad384f73b->leave($__internal_298247ea90af39799e34b1dba2989e14d570f2ea6b8d122f8288b4dad384f73b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}<a href="{{ path('logout') }}">Logout</a>{% endblock %}*/
/* */
