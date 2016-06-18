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
        $__internal_193ffb7a6ba2df5f2abac4455dabc8a4f772eec7dd33f7d023a5d0a38963594e = $this->env->getExtension("native_profiler");
        $__internal_193ffb7a6ba2df5f2abac4455dabc8a4f772eec7dd33f7d023a5d0a38963594e->enter($__internal_193ffb7a6ba2df5f2abac4455dabc8a4f772eec7dd33f7d023a5d0a38963594e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_193ffb7a6ba2df5f2abac4455dabc8a4f772eec7dd33f7d023a5d0a38963594e->leave($__internal_193ffb7a6ba2df5f2abac4455dabc8a4f772eec7dd33f7d023a5d0a38963594e_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_4eeb7d459b7475fcc86a85d5c50d88f0112ac2931273c6bc0602ec0799b38408 = $this->env->getExtension("native_profiler");
        $__internal_4eeb7d459b7475fcc86a85d5c50d88f0112ac2931273c6bc0602ec0799b38408->enter($__internal_4eeb7d459b7475fcc86a85d5c50d88f0112ac2931273c6bc0602ec0799b38408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_4eeb7d459b7475fcc86a85d5c50d88f0112ac2931273c6bc0602ec0799b38408->leave($__internal_4eeb7d459b7475fcc86a85d5c50d88f0112ac2931273c6bc0602ec0799b38408_prof);

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
