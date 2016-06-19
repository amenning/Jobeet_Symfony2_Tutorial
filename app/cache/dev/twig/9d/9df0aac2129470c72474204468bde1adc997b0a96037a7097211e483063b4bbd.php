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
        $__internal_d93937e5254d98263c29f55eb362bf040f6122b3793eb47a402bb468973e3b59 = $this->env->getExtension("native_profiler");
        $__internal_d93937e5254d98263c29f55eb362bf040f6122b3793eb47a402bb468973e3b59->enter($__internal_d93937e5254d98263c29f55eb362bf040f6122b3793eb47a402bb468973e3b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_d93937e5254d98263c29f55eb362bf040f6122b3793eb47a402bb468973e3b59->leave($__internal_d93937e5254d98263c29f55eb362bf040f6122b3793eb47a402bb468973e3b59_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_bd83ebd651315e10b3ab99772f4b162443a87f6d1fc967336f0953a2a5bd680c = $this->env->getExtension("native_profiler");
        $__internal_bd83ebd651315e10b3ab99772f4b162443a87f6d1fc967336f0953a2a5bd680c->enter($__internal_bd83ebd651315e10b3ab99772f4b162443a87f6d1fc967336f0953a2a5bd680c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>";
        
        $__internal_bd83ebd651315e10b3ab99772f4b162443a87f6d1fc967336f0953a2a5bd680c->leave($__internal_bd83ebd651315e10b3ab99772f4b162443a87f6d1fc967336f0953a2a5bd680c_prof);

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
