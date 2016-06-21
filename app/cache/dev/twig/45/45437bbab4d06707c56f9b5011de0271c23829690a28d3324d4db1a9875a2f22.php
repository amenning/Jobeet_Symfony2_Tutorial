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
        $__internal_6320f1cf2b46d292a5269643db54e49a9f326adf3ecf58a999678b8f38d3d54c = $this->env->getExtension("native_profiler");
        $__internal_6320f1cf2b46d292a5269643db54e49a9f326adf3ecf58a999678b8f38d3d54c->enter($__internal_6320f1cf2b46d292a5269643db54e49a9f326adf3ecf58a999678b8f38d3d54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_6320f1cf2b46d292a5269643db54e49a9f326adf3ecf58a999678b8f38d3d54c->leave($__internal_6320f1cf2b46d292a5269643db54e49a9f326adf3ecf58a999678b8f38d3d54c_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_ac0b9e757ef63b25cb3516e096087cf0602ea978aa33ebc98fddaa775b9731c9 = $this->env->getExtension("native_profiler");
        $__internal_ac0b9e757ef63b25cb3516e096087cf0602ea978aa33ebc98fddaa775b9731c9->enter($__internal_ac0b9e757ef63b25cb3516e096087cf0602ea978aa33ebc98fddaa775b9731c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>";
        
        $__internal_ac0b9e757ef63b25cb3516e096087cf0602ea978aa33ebc98fddaa775b9731c9->leave($__internal_ac0b9e757ef63b25cb3516e096087cf0602ea978aa33ebc98fddaa775b9731c9_prof);

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
