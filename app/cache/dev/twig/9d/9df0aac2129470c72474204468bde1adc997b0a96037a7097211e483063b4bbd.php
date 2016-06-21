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
        $__internal_f09654df6baa8c9f55609d12cc142401b77cfc2bb0af6e8fdda934d88b91f00b = $this->env->getExtension("native_profiler");
        $__internal_f09654df6baa8c9f55609d12cc142401b77cfc2bb0af6e8fdda934d88b91f00b->enter($__internal_f09654df6baa8c9f55609d12cc142401b77cfc2bb0af6e8fdda934d88b91f00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_f09654df6baa8c9f55609d12cc142401b77cfc2bb0af6e8fdda934d88b91f00b->leave($__internal_f09654df6baa8c9f55609d12cc142401b77cfc2bb0af6e8fdda934d88b91f00b_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_c124c7fc154a2a07e12d41c80e5b1c315631aa1af0dcbdb3992c03ec2e939582 = $this->env->getExtension("native_profiler");
        $__internal_c124c7fc154a2a07e12d41c80e5b1c315631aa1af0dcbdb3992c03ec2e939582->enter($__internal_c124c7fc154a2a07e12d41c80e5b1c315631aa1af0dcbdb3992c03ec2e939582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>";
        
        $__internal_c124c7fc154a2a07e12d41c80e5b1c315631aa1af0dcbdb3992c03ec2e939582->leave($__internal_c124c7fc154a2a07e12d41c80e5b1c315631aa1af0dcbdb3992c03ec2e939582_prof);

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
