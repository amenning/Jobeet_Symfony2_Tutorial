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
        $__internal_73079cd3bb6597fccd26531cf859a355c66a5dff50593f982a79d92386819857 = $this->env->getExtension("native_profiler");
        $__internal_73079cd3bb6597fccd26531cf859a355c66a5dff50593f982a79d92386819857->enter($__internal_73079cd3bb6597fccd26531cf859a355c66a5dff50593f982a79d92386819857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_73079cd3bb6597fccd26531cf859a355c66a5dff50593f982a79d92386819857->leave($__internal_73079cd3bb6597fccd26531cf859a355c66a5dff50593f982a79d92386819857_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_55e1f11d610a48eab5b830f87223e7ebdd03719e9fdb3e9116f1dd431f0f27f1 = $this->env->getExtension("native_profiler");
        $__internal_55e1f11d610a48eab5b830f87223e7ebdd03719e9fdb3e9116f1dd431f0f27f1->enter($__internal_55e1f11d610a48eab5b830f87223e7ebdd03719e9fdb3e9116f1dd431f0f27f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>";
        
        $__internal_55e1f11d610a48eab5b830f87223e7ebdd03719e9fdb3e9116f1dd431f0f27f1->leave($__internal_55e1f11d610a48eab5b830f87223e7ebdd03719e9fdb3e9116f1dd431f0f27f1_prof);

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
/* {% block user_block %}<a href="{{ path('logout') }}">Logout</a>{% endblock %}*/
/* */
