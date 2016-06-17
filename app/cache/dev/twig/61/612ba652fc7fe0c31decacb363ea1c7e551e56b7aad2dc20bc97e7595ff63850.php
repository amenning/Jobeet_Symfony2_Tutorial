<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_d75cc6e62dbff1c2e0702e407bf85cf98af810418d0b46fa7377cc4dd6057f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bd071da8fe74741c8b2ccab5b3c8a19eb0a7859d244653ebbe94505234d6a81 = $this->env->getExtension("native_profiler");
        $__internal_0bd071da8fe74741c8b2ccab5b3c8a19eb0a7859d244653ebbe94505234d6a81->enter($__internal_0bd071da8fe74741c8b2ccab5b3c8a19eb0a7859d244653ebbe94505234d6a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_0bd071da8fe74741c8b2ccab5b3c8a19eb0a7859d244653ebbe94505234d6a81->leave($__internal_0bd071da8fe74741c8b2ccab5b3c8a19eb0a7859d244653ebbe94505234d6a81_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_a269ce3d95e868f042ac0c548f94161275c12ad3f1421052000ea2f431dc3e9a = $this->env->getExtension("native_profiler");
        $__internal_a269ce3d95e868f042ac0c548f94161275c12ad3f1421052000ea2f431dc3e9a->enter($__internal_a269ce3d95e868f042ac0c548f94161275c12ad3f1421052000ea2f431dc3e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_a269ce3d95e868f042ac0c548f94161275c12ad3f1421052000ea2f431dc3e9a->leave($__internal_a269ce3d95e868f042ac0c548f94161275c12ad3f1421052000ea2f431dc3e9a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
