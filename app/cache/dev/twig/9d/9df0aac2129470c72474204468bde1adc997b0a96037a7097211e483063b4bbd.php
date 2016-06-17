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
        $__internal_e68bfe83566baaebc8f9b892554335bb64d0865467e1036743bcdafcdd77d9c2 = $this->env->getExtension("native_profiler");
        $__internal_e68bfe83566baaebc8f9b892554335bb64d0865467e1036743bcdafcdd77d9c2->enter($__internal_e68bfe83566baaebc8f9b892554335bb64d0865467e1036743bcdafcdd77d9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_e68bfe83566baaebc8f9b892554335bb64d0865467e1036743bcdafcdd77d9c2->leave($__internal_e68bfe83566baaebc8f9b892554335bb64d0865467e1036743bcdafcdd77d9c2_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_8cfc2288a95edfde066379eb6a09e3e565badb806fb4b416ae8fb9cc89fc3fc7 = $this->env->getExtension("native_profiler");
        $__internal_8cfc2288a95edfde066379eb6a09e3e565badb806fb4b416ae8fb9cc89fc3fc7->enter($__internal_8cfc2288a95edfde066379eb6a09e3e565badb806fb4b416ae8fb9cc89fc3fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_8cfc2288a95edfde066379eb6a09e3e565badb806fb4b416ae8fb9cc89fc3fc7->leave($__internal_8cfc2288a95edfde066379eb6a09e3e565badb806fb4b416ae8fb9cc89fc3fc7_prof);

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
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
