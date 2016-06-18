<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_4e50ee15d6a4dcbfa53edde3a4a6df1dba616cb6aa5d80ae740833dcea761f30 extends Twig_Template
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
        $__internal_cfadb1bc51e2edc70c20b8437f9dc5506af28eeecec7a9d78ca09c38e64d4ada = $this->env->getExtension("native_profiler");
        $__internal_cfadb1bc51e2edc70c20b8437f9dc5506af28eeecec7a9d78ca09c38e64d4ada->enter($__internal_cfadb1bc51e2edc70c20b8437f9dc5506af28eeecec7a9d78ca09c38e64d4ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_cfadb1bc51e2edc70c20b8437f9dc5506af28eeecec7a9d78ca09c38e64d4ada->leave($__internal_cfadb1bc51e2edc70c20b8437f9dc5506af28eeecec7a9d78ca09c38e64d4ada_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_472764099e71fa2df46f9d889e8e59c85d607e59f7fd6a2898599f5c63adad7e = $this->env->getExtension("native_profiler");
        $__internal_472764099e71fa2df46f9d889e8e59c85d607e59f7fd6a2898599f5c63adad7e->enter($__internal_472764099e71fa2df46f9d889e8e59c85d607e59f7fd6a2898599f5c63adad7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_472764099e71fa2df46f9d889e8e59c85d607e59f7fd6a2898599f5c63adad7e->leave($__internal_472764099e71fa2df46f9d889e8e59c85d607e59f7fd6a2898599f5c63adad7e_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
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
