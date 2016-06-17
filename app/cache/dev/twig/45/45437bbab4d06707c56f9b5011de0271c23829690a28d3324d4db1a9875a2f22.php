<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_09c9aa40ce0aa8096872b74aded3047813739c2bb926665686911ca49b322b88 extends Twig_Template
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
        $__internal_5a082dc2e013a31ba5b2fe160d6e0bad9e6e9df6da2120d57d4c5818c51d5849 = $this->env->getExtension("native_profiler");
        $__internal_5a082dc2e013a31ba5b2fe160d6e0bad9e6e9df6da2120d57d4c5818c51d5849->enter($__internal_5a082dc2e013a31ba5b2fe160d6e0bad9e6e9df6da2120d57d4c5818c51d5849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_5a082dc2e013a31ba5b2fe160d6e0bad9e6e9df6da2120d57d4c5818c51d5849->leave($__internal_5a082dc2e013a31ba5b2fe160d6e0bad9e6e9df6da2120d57d4c5818c51d5849_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_812dc5ac5af01b3303f0e335c48ad42446ad7b19365d652f36cae4bcca5c3c7b = $this->env->getExtension("native_profiler");
        $__internal_812dc5ac5af01b3303f0e335c48ad42446ad7b19365d652f36cae4bcca5c3c7b->enter($__internal_812dc5ac5af01b3303f0e335c48ad42446ad7b19365d652f36cae4bcca5c3c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_812dc5ac5af01b3303f0e335c48ad42446ad7b19365d652f36cae4bcca5c3c7b->leave($__internal_812dc5ac5af01b3303f0e335c48ad42446ad7b19365d652f36cae4bcca5c3c7b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
