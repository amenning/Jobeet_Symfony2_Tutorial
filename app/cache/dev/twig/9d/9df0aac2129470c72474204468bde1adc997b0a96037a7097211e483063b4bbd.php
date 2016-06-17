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
        $__internal_fdbf986c81fabab8c3059c84983dcb5c5db7a8e6ddfb44da3f5c79905aa4c69c = $this->env->getExtension("native_profiler");
        $__internal_fdbf986c81fabab8c3059c84983dcb5c5db7a8e6ddfb44da3f5c79905aa4c69c->enter($__internal_fdbf986c81fabab8c3059c84983dcb5c5db7a8e6ddfb44da3f5c79905aa4c69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_fdbf986c81fabab8c3059c84983dcb5c5db7a8e6ddfb44da3f5c79905aa4c69c->leave($__internal_fdbf986c81fabab8c3059c84983dcb5c5db7a8e6ddfb44da3f5c79905aa4c69c_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_815d356612385c0324641d8db07a4116f4bf5a850613c5bc6d0b1061bd2525a8 = $this->env->getExtension("native_profiler");
        $__internal_815d356612385c0324641d8db07a4116f4bf5a850613c5bc6d0b1061bd2525a8->enter($__internal_815d356612385c0324641d8db07a4116f4bf5a850613c5bc6d0b1061bd2525a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_815d356612385c0324641d8db07a4116f4bf5a850613c5bc6d0b1061bd2525a8->leave($__internal_815d356612385c0324641d8db07a4116f4bf5a850613c5bc6d0b1061bd2525a8_prof);

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
