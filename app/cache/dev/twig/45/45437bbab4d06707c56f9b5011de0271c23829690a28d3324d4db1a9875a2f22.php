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
        $__internal_bac98e5f71e691b8967de034993a594ea02853da455d2292fe4185d9a91eebf9 = $this->env->getExtension("native_profiler");
        $__internal_bac98e5f71e691b8967de034993a594ea02853da455d2292fe4185d9a91eebf9->enter($__internal_bac98e5f71e691b8967de034993a594ea02853da455d2292fe4185d9a91eebf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_bac98e5f71e691b8967de034993a594ea02853da455d2292fe4185d9a91eebf9->leave($__internal_bac98e5f71e691b8967de034993a594ea02853da455d2292fe4185d9a91eebf9_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_be3f565ea259e47bf5f9c0e8d3fe31bc8b8a1ed4d7bfe7fefe9ec9bf59e3046f = $this->env->getExtension("native_profiler");
        $__internal_be3f565ea259e47bf5f9c0e8d3fe31bc8b8a1ed4d7bfe7fefe9ec9bf59e3046f->enter($__internal_be3f565ea259e47bf5f9c0e8d3fe31bc8b8a1ed4d7bfe7fefe9ec9bf59e3046f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_be3f565ea259e47bf5f9c0e8d3fe31bc8b8a1ed4d7bfe7fefe9ec9bf59e3046f->leave($__internal_be3f565ea259e47bf5f9c0e8d3fe31bc8b8a1ed4d7bfe7fefe9ec9bf59e3046f_prof);

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
